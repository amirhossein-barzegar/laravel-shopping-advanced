<?php

namespace App\Http\Livewire\Shop;

use App\Models\ProductComment;
use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;

class ProductCommentComponent extends Component
{
    protected $rules = [
        'title' => 'min:5|max:100|string',
        'description' => 'required|min:10|string'
    ];

    public $title = "";
    public $description = "";
    public $reply_id = 0;

    public $product;

    public function mount($product) {
        $this->product = $product;
    }
    public function render()
    {
        $comments = ProductComment::where('product_id',$this->product->id)->where('reply_id',0)->with('user','product')->get();
        return view('livewire.shop.product-comment-component',compact('comments'));
    }

    public function addProductComment(Request $request,$productId) {
        $this->validate();
        
        $comment = new ProductComment([
            'title' => $this->title,
            'description' => $this->description,
            'reply_id' => $this->reply_id,
            'product_id' => $productId,
        ]);

        $user = User::findOrFail(auth()->id());
        $user->productComments()->save($comment);

        session()->flash('success','نظر شما با موفقیت ثبت گردید');
        $this->reset(['title','description','reply_id']);
    }

    
    public function setReplyId($commentId) {
        $this->reply_id = $commentId;
        $this->setRepliedComment();
    }

    public $repliedComment;

    public function setRepliedComment() {
        $this->repliedComment = ProductComment::where('id',$this->reply_id)->with('user')->first();
    }

    public function resetReplyComment() {
        $this->reset('reply_id');
    }
}
