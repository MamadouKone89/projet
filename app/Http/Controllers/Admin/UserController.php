<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\UserDataTable;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Repositories\Admin\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Util\HttpUtil;
use App\Models\Admin\Role;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'id');
        return view('admin.users.create')->withRoles($roles);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $inputs = $request->all();
        $message = 'User enregistré avec succès.';

        $user = $this->userRepository->create($inputs);
        $roles = $request->input('roles') ? $request->input('roles') : [];
        $user->assignRole($roles);
        if($request->ajax()) {
            return HttpUtil::sendSuccessDialogResponse($message);
        }
        Flash::success($message);

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User introuvable');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);
        $roles = Role::get()->pluck('name', 'id');
        if (empty($user)) {
            Flash::error('User introuvable');

            return redirect(route('admin.users.index'));
        }

        return view('admin.users.edit' , compact('user', 'roles'));
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User introuvable');

            return redirect(route('admin.users.index'));
        }
        $message = 'User mis à jour avec succès.';

        $user = $this->userRepository->update($request->all(), $id);
        if($request->ajax()) {
            return HttpUtil::sendSuccessDialogResponse($message, false);
        }

        Flash::success($message);

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }

        $this->userRepository->delete($id);
        $message = 'User supprimé avec succès.';
        if(request()->ajax()) {
            return HttpUtil::sendSuccessDialogResponse('Bidon supprimé avec succès');
        }
        Flash::success($message);

        return redirect(route('admin.users.index'));
    }
}
