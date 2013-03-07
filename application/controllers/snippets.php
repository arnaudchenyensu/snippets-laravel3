<?php

class Snippets_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
    {

    }

	public function post_create()
    {
        // Validate

        $new_snippet = Snippet::create(array('snippet' => Input::get('snippet')));

        if($new_snippet)
            return Redirect::to_route('snippet', $new_snippet->id);

        // TODO else
    }

	public function get_show($id)
    {
        $snippet = Snippet::find($id);
        return View::make('snippet.show', $snippet->to_array());
    }

	public function get_edit()
    {

    }

	public function get_new()
    {
        return View::make('snippet.new');
    }

	public function put_update()
    {

    }

	public function delete_destroy()
    {

    }

}