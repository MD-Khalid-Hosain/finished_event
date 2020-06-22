<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Location;
use App\Booking_Category;
use App\BookingRegistraion;
use PDF;
use Carbon\Carbon;
use Auth;

class FrontendController extends Controller
{
    public function home_page() {
      $event_lists = Event::all();
      $location_lists = Location::all();
        return view('front_page.index', compact('event_lists','location_lists'));
      }

    public function event_details($details_id) {
        $event_lists = Event::all();
        $booking_categories = Booking_Category::all();
        $single_event_details = Event::find($details_id);
        return view('front_page.event_details', compact('single_event_details','booking_categories','event_lists'));

      }
      public function order_download($order_id){
      $order_info =  BookingRegistraion::findOrFail($order_id);
      $order_pdf = PDF::loadView('front_page.customer_invoice_pdf', compact('order_info'))->setPaper('a4', 'portrait');
      $invoice_name = "Order-".$order_info->id."-".Carbon::now()->format('d-m-Y').".pdf";
      return $order_pdf->download($invoice_name);
  }
  public function bkash_payment(Request $request){
    BookingRegistraion::create([
      'user_name' =>$request->user_name,
      'user_id' =>Auth::id(),
      'user_email' =>$request->user_email,
      'event_title' =>$request->event_title,
      'event_category' =>$request->event_category,
      'published_at' =>$request->published_at,
      'event_location' =>$request->event_location,
      'event_time' =>$request->event_time,
      'user_number' =>$request->user_number,
      'event_cost' =>$request->event_cost,
      'per_person_cost' =>$request->per_person_cost,
      'total_cost' =>$request->event_cost +($request->people * $request->per_person_cost ),
      'people' =>$request->people,
      'payment_status' =>'paid',
      'payment_method' =>2,
      'transection_id' =>$request->transection_id,
      'bkash_amount' =>$request->bkash_amount,
      'created_at' =>Carbon::now()
      ]);
      return redirect(route('booking_details'))->with('successstatus', 'Your booking successfully Done!!');
  }


}
