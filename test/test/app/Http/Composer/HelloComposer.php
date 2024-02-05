<?php
namespace App\Http\Composer;
use Illuminate\View\View;

class HelloComposer
{
    public function compose(View $view){
        $view->with('view_message','this is'.$view->getName().'!!');
    }
}


?>