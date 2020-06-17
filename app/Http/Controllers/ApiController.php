<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Api;
use Exception;
use Illuminate\View\View;
class ApiController extends Controller
{
    protected $api;

    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        //show the welcome view
        return view('pages.welcome');
    }

    public function allServices(Request $request)
    {
        if($request->query()==[]){
            $allService = $this->api->all('GET','services',null);
        }
        $allService = $this->api->findBy('GET', 'services',$request->query(), null);
        return $allService;
    }
    public function updateServices(Request $request, $id, $token)
    {
        $updatedService =  $this->api('PUT', 'service/update'.$id, $request->query(), $token);
        return $updatedService;
    }
    public function destroyServices(Request $request, $id, $token)
    {
        $deletedService= $this->api('DELETE', 'service'.$id, $request->query(), $token);
        return $deletedService;
    }
    public function createBookings(Request $request, $token)
    {
        $newBooking = $this->api('POST', 'booking/add', null, $request->query(), $token);
        return $newBooking;
    }
    public function createService(Request $request,  $token)
    {
        $newService = $this->api('POST', 'service/add', $request->query(), $token);
        return $newService;
    }
    public function serviceById(Request $request, $id, $token)
    {
        if($request->query()==[]){
            return $this->api->all('GET','service'.$id, $token);
        }
        return $this->api->findBy('GET', 'service'.$id,$request->query(), $token);
    }
    public function providerById(Request $request, $id, $token)
    {
        if($request->query()==[]){
            return $this->api->all('GET','provider'.$id, $token);
        }
        return $this->api->findBy('GET', 'provider'.$id,$request->query(), $token);
    }
    public function updateProvider(Request $request, $id, $token)
    {
        $updatedProvider =  $this->api('PUT', 'provider/update'.$id, $request->query(), $token);
        return $updatedProvider;
    }
    public function createUser(Request $request, $token)
    {
        $newService = $this->api('POST', 'service/add', $request->query(), $token);
        return $newService;
    }
}
