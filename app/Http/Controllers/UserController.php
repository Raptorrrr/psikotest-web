<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserController extends Controller
{
    protected function rules(User $user = null): array
    {
        return [
            'email' => ['required', 'email', Rule::when($user !== null,
                ['unique:users,email,' . $user?->id],
                ['unique:users']
            )],
            'nik' => ['required', 'string', Rule::when($user !== null,
                ['unique:users,nik,' . $user?->id],
                ['unique:users']
            )],
            'name' => ['required', 'string'],
            'address' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
        ];
    }

    public function index(): View
    {
        return view('pages.setting.user-management.index', [
            'users' => User::query()
                ->whereNot('role', User::ROLE_ADMIN)
                ->orderBy('updated_at', 'desc')
                ->paginate(10)
                ->withQueryString(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $filtered = $request->validate($this->rules());
        $user_password = Str::random(6);

        $user = User::query()->create([
            'name' => $filtered['name'],
            'nik' => $filtered['nik'],
            'address' => $filtered['address'],
            'phone' => $filtered['phone'],
            'role' => User::ROLE_PARTICIPANT,
            'email' => $filtered['email'],
            'password' => Hash::make($user_password),
        ]);

        return redirect()->route('setting.user.index')->with('password', $user_password);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $filtered = $request->validate($this->rules($user));

        $user->name = $filtered['name'];
        $user->nik = $filtered['nik'];
        $user->address = $filtered['address'];
        $user->phone = $filtered['phone'];
        $user->email = $filtered['email'];
        $user->save();

        return redirect()->route('setting.user.index');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('setting.user.index');
    }
}
