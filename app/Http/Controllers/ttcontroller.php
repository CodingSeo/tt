<?php

namespace App\Http\Controllers;


use App\Http\Requests\APIrequest;
use App\Service\TestService;
use App\test\test;
use App\test\Contact;
use App\test\Address;
use App\test\testM;
use App\test\testMapping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use JsonMapper;

class ttcontroller extends Controller
{
    private $test;
    private $e;
    public function __construct(TestService $test)
    {
        $this->test = $test;
    }
    public function index(Request $request)
    {
        $array = [
            'nam'=>'Sheldon Cooper',
            'address'=> [
                'street'=> '2311 N. Los Robles Avenue',
                'city'=> 'Pasadena'
            ]
        ];
        $json_encoded = json_encode($array);
        $json_decoded = json_decode($json_encoded);
        // dd($json_decoded);
        $mapper = new JsonMapper();
        $mapper->bStrictNullTypes = false;
        // $mapper->bEnforceMapType = false;
        $contact = $mapper->map($json_decoded, new Contact());
        // $contact = $mapper->mapArray($json_decoded, array(), 'Contact');
        // $t = $mapper->map
        $array = (array) $contact;
    }

    public function test(APIrequest $request)
    {

        $t = test::class;


        dd(new $t($request->all()));

    }

    public function auth(APIrequest $request)
    {
        return $request . Route::currentRouteName();
    }
    public function ee() : testMapping
    {
        $array=[
            'test'=>1,
            'testes'=>2
        ];
        $json_encoded = json_encode($array);
        $json_decoded = json_decode($json_encoded);
        $mapper = new JsonMapper();
        $mapper->bStrictNullTypes = false;
        $mapper->bEnforceMapType = false;
        $contact = $mapper->map($json_decoded, new testMapping());
        return $contact;
    }
}
