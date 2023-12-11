<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function listItem()
    {
        $categories = Category::all();
        $items      = Item::all();

        return view('item.list-item', [
                                         'categories'   => $categories,
                                         'items'        => $items
                                    ]);
    }

    public function addItem(Request $request)
    {
        $validator = validator(request()->all(),
        [
            "category_id"   => "required",
            "name"          => "required",            
            "photo"         => "required",
            "remark"        => "required"
        ]);

        if($validator->fails())
        {
            return back()->with('status',"Please enter Data !");
        }

        $item = new Item();

            $item->category_id     = request()->category_id;

            $item->name            = request()->name;

            if($request->hasfile('photo'))
            {
                $file        = $request->file('photo');
                $name        = $file->getClientOriginalName();
                $extension   = $file->getClientOriginalExtension();

                $file->move('images/',$name);

                $item->photo = $name;

            }
            else
            {
                $item->photo = '';
            }

            $item->remark   = request()->remark;

        $item->save();

        return redirect('/admin/item/list')->with('status', 'Added Successfully');
    }

    public function deleteItem()
    {
        $id = request()->id;

        Item::find($id) -> delete();

        return redirect('/admin/item/list')->with('status', 'Deleted Successfully');
    }

    public function updItem()
    {
        $id     = request()->id;
        $item   = Item::find($id);

        $categories = Category::all();


        return view('item.upd-item',[
                                        'item'          => $item,
                                        'categories'    => $categories
                                    ]);
    }

    public function updateItem(Request $request)
    {

        $validator = validator(request()->all(),
        [
            "name"      => "required",                        
            
        ]);

        if($validator->fails())
        {
            return back()->with('status',"Please enter Data !");
        }

        $id = request()->id;

       
        $item = Item::find($id);

            $item->category_id      = request()->category_id;
            $item->name             = request()->name;

            if($request->hasfile('photo'))
            {
                $file        = $request->file('photo');
                $name        = $file->getClientOriginalName();
                $extension   = $file->getClientOriginalExtension();

                $file->move('images/',$name);

                $item->photo = $name;

            }           

            $item->remark   = request()->remark;

        $item->save();

        return redirect('/admin/item/list')->with('status', 'Updated Successfully');

    }

}
