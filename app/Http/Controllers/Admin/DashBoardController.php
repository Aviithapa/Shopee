<?php

namespace App\Http\Controllers\Admin;

use App\Modules\Backend\Authentication\User\Repositories\UserRepository;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends BaseController
{
    private $userRepository;
    private $eventRepository;
    private $donorRepository;
    private $productRepository;

    public function __construct(UserRepository $userRepository,EventRepository $eventRepository, DonationRepository $donorRepository,
ProductRepository $productRepository)
    {
        $this->userRepository = $userRepository;
        $this->eventRepository=$eventRepository;
        $this->donorRepository=$donorRepository;
        $this->productRepository=$productRepository;
        parent::__construct();
    }

    public function index()
    {
        $role = Auth::user()->mainRole()?Auth::user()->mainRole()->name:'default';
        switch ($role) {
            case 'administrator':
                $event_created=$this->eventRepository->getAllInActive();
                return $this->view('dashboard.administrator', compact('event_created'));
                break;
            case 'customer':
                $product=$this->productRepository->getAll()->where('user_id','=',Auth::user()['id']);
                return $this->view('dashboard.customer',compact('product'));
                break;
            case 'donor':
                $donor=$this->donorRepository->getAll()->where('user_id','=',Auth::user()['id'])->first();
                $event=$this->eventRepository->findById($donor['event_id']);
                return $this->view('dashboard.main',compact('event'));
                break;
            case 'b2b_agent':
                return $this->view('dashboard.b2b-agent');
                break;
            case 'api_agent':
                return $this->view('dashboard.api-agent');
                break;
            case 'travel_guide':
                return $this->view('dashboard.travel-guide');
                break;
            default:
                return $this->view('dashboard.default');

        }
    }

}
