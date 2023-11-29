<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

  public function index()
  {
    $users = User::paginate(10);
    return \view('backend.users.index', get_defined_vars());
  }

  public function ajaxList(Request $request)
  {
    if ($request->ajax()) {
      $users = DB::table('users')->where('role', '=', 'user')->orderBy('id', 'desc')->get();
      return DataTables::of($users)
        ->addIndexColumn()
        ->addColumn('action', function ($user) {
          $html = '<a href="" role="button" data-bs-toggle="modal" data-bs-target="#showModal' . $user->id . '" class="me-1"><i class="bx bx-show"></i></a>';
          $html .= '<div class="modal fade" id="showModal' . $user->id . '" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="showModalLabel">User Info</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="card" style="box-shadow:none;">
                                <div class="card-body">
                                  <small class="text-muted text-uppercase">About</small>
                                  <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span> <span>'.$user->name.'</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span style="text-transform:capitalize">'.$user->role.'</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-flag"></i><span class="fw-semibold mx-2">Country:</span> <span>'.$user->country.'</span></li>
                                  </ul>
                                  <small class="text-muted text-uppercase">Contacts</small>
                                  <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span> <span>'.$user->phone.'</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-map"></i><span class="fw-semibold mx-2">Address:</span> <span>'.$user->address.'</span></li>
                                    <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>'.$user->email.'</span></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-sm text-white" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>';
          $html .= '<a href="' . route('users.edit', $user->id) . '" class="me-1"><i class="bx bx-edit"></i></a>';
          $html .= '<a href="" role="button" data-bs-toggle="modal" data-bs-target="#deleteModal' . $user->id . '" class=""><i class="bx bx-trash-alt"></i></a>';
          $html .= '<div class="modal fade" id="deleteModal' . $user->id . '" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Are you sure to delete this User?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-sm text-white" data-bs-dismiss="modal">Close</button>
                              <form method="post" action="' . route('users.destroy', $user->id) . '">
                              ' . csrf_field() . '
                              ' . method_field("DELETE") . '
                                  <button type="submit" class="btn btn-danger btn-sm text-white" data-bs-dismiss="modal">Delete</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>';
          return $html;
        })
        ->addColumn('status', function ($user) {
          $html = $user->status == 0 ? '<span class="badge bg-info">Pending</span>' : ($user->status == 1 ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Danger</span>');
          return $html;
        })
        ->rawColumns(['action', 'status'])
        ->make(true);
    }
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function viewUser($id)
  {
    $user = User::with(['orders'])->where('id', $id)->first();
    dd($user->toArray());
  }

  public function show($id)
  {
    $user = User::with(['orders'])->where('id', $id)->first();
    return view('backend.users.single_user.profile', get_defined_vars());
  }

  public function edit($id)
  {
    $user = User::with(['orders'])->find($id);
    return view('backend.users.single_user.edit_account', get_defined_vars());
  }

  public function update(Request $request, $id)
  {
    //
    $user = User::find($id);
    $user->status = 1;
    $user->update();
    return redirect()->to('app/users');
  }

  public function destroy($id)
  {
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->to('app/users');
  }

  public function roles(){
    $superadmins = User::where('role', '=', 'superadmin')->get();
    $users = User::where('role', '=', 'user')->get();
    return view('backend.users.roles', get_defined_vars());
  }

  public function adsByUser($id)
  {
    $user = User::with(['orders'])->find($id);
    return view('backend.users.single_user.ads', \get_defined_vars());
  }

  public function adListByUser(Request $request, $id)
  {
    if ($request->ajax()) {
      $ads = DB::table('ads')->where('user_id', $id)->orderBy('id', 'desc')->get();
      return DataTables::of($ads)
        ->addColumn('action', function ($ad) {
          $html = '<a href="" type="button" data-id="' . $ad->id . '" data-bs-toggle="modal" data-bs-target="#editModal" class="open_edit_modal me-1"><i class="bx bx-edit"></i></a>';
          $html .= '<a href="" type="button" data-id="' . $ad->id . '" data-bs-toggle="modal" data-bs-target="#deleteModal" class="open_delete_modal"><i class="bx bx-trash-alt"></i></a>';
          return $html;
        })
        ->addColumn('image', function ($ad) {
          $html = "<img style='width: 40px; height: 40px; border-radius: 4px;' src='" . $ad->feature_image . "'>";
          return $html;
        })
        ->addColumn('created_at', function ($ad) {
          $html = "<small>" . date('d-m-Y', strtotime($ad->created_at)) . "</small>";
          $html .= "<br><small>" . date('H:i:s', strtotime($ad->created_at)) . "</small>";
          return $html;
        })
        ->addColumn('status', function ($ad) {
          $html = $ad->status == 0 ? '<span class="badge bg-danger">Unpublish</span>' : '<span class="badge bg-success">Publish</span>';
          return $html;
        })
        ->rawColumns(['action', 'status', 'image', 'created_at'])
        ->make(true);
    }
    return view('backend.users.single_user.ads');
  }

  public function userSecurity($id)
  {
    $user = User::with(['orders'])->find($id);
    return view('backend.users.single_user.security', get_defined_vars());
  }

  public function userPayments($id)
  {
    $user = User::with(['orders', 'payments'])->find($id);
    return view('backend.users.single_user.payments', get_defined_vars());
  }

  public function paymentListByUser(Request $request, $id)
  {
    if ($request->ajax()) {
      $payments = DB::table('payments')->where('user_id', $id)->orderBy('id', 'desc')->get();
      return DataTables::of($payments)
        ->addColumn('action', function ($payment) {
          $html = '<a href="" type="button" data-id="' . $payment->id . '" data-bs-toggle="modal" data-bs-target="#viewModal" class="open_view_modal me-1"><i class="bx bx-eye"></i></a>';
          return $html;
        })
        ->addColumn('created_at', function ($payment) {
          $html = "<small>" . date('d-m-Y', strtotime($payment->created_at)) . "</small>";
          $html .= "<br><small>" . date('H:i:s', strtotime($payment->created_at)) . "</small>";
          return $html;
        })
        ->addColumn('status', function ($payment) {
          $html = $payment->status == 0 ? '<span class="badge bg-danger">Unpaid</span>' : '<span class="badge bg-success">Paid</span>';
          return $html;
        })
        ->addColumn('via', function ($payment) {
          return "<small>" . \ucfirst($payment->payment_method) . "</small>";
        })
        ->rawColumns(['action', 'status', 'created_at', 'via'])
        ->make(true);
    }
  }

  public function ordersList($id)
  {
    $user = User::with(['orders', 'payments'])->find($id);
    return view('backend.users.single_user.orders', get_defined_vars());
  }

  public function orderListByUser(Request $request, $id)
  {
    if ($request->ajax()) {
      $orders = DB::table('orders')->where('user_id', $id)->orderBy('id', 'desc')->get();
      return DataTables::of($orders)
        ->addColumn('action', function ($order) {
          $html = '<a href="" type="button" data-id="' . $order->id . '" data-bs-toggle="modal" data-bs-target="#viewModal" class="open_view_modal me-1"><i class="bx bx-eye"></i></a>';
          return $html;
        })
        ->addColumn('created_at', function ($order) {
          $html = "<small>" . date('d-m-Y', strtotime($order->created_at)) . "</small>";
          $html .= "<br><small>" . date('H:i:s', strtotime($order->created_at)) . "</small>";
          return $html;
        })
        ->addColumn('status', function ($order) {
          $html = $order->status == 0 ? '<span class="badge bg-danger">Unpaid</span>' : '<span class="badge bg-success">Paid</span>';
          return $html;
        })
        ->addColumn('via', function ($order) {
          return "<small>" . \ucfirst($order->payment_method) . "</small>";
        })
        ->rawColumns(['action', 'status', 'created_at', 'via'])
        ->make(true);
    }
  }
}
