<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CrudController extends Controller
{
    public function __construct()
    {

    }

    public function getOffers()
    {
       return Offer::select('id','name')->get();
    }

//    public function store() {
//        Offer::create([
//            'name' => 'offer3',
//            'price' => '500',
//            'details' => 'offer details',
//        ]);
//    }

    public function create() {
        return view('offers/create');
    }

    public function Store(OfferRequest $request) {
        //return $request;

//        $rules = $this -> getRules();
//        $messages = $this -> getMessages();
//        $validator = Validator::make($request->all(),$rules,$messages);
//
//        if($validator -> fails()) {
//            //return $validator -> errors();
//            return redirect() -> back()->withErrors(($validator)) ->withInputs($request->all());
//        }

        Offer::create([
            'name' => $request ->name,
            'price' => $request ->price,
            'details' => $request ->details,
        ]);
        //return 'saved successfully';
        return redirect() -> back() -> with(['success' => 'the offer is added successfully']);
    }

    protected function getRules() {
        return $rules = [
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required'
        ];
    }

    protected function getMessages() {
        return $messages =  [
            'name.required' => __('messages.name required'),
            'name.max' => __('messages.name max'),
            'name.unique' => __('messages.name unique'),
            'price.required' => __('messages.price required'),
            'price.numeric' => __('messages.price numeric'),
            'details.required' => __('messages.details required')
        ];
    }
}
