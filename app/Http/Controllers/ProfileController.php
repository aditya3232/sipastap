<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDOException;
use Throwable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit() {
        try {
            $id = auth()->user()->id;
            $data = User::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal masuk form edit profile!');
            return back();
        }

        return view('mazer_template.admin.profile.edit', compact('data'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request) {
        try {
            $id = auth()->user()->id;
            $User = User::findOrFail($id);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal update profile!');
            return back();
        }

        $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        // Check if the 'password' field is null or empty, then do not update the password
        if ($request->has('password') && !empty($request->password)) {
            $password = Hash::make($request->password);
        } else {
            $password = $User->password;
        }

        if($validator->fails()) {
            Alert::error('Cek kembali pengisian form, terima kasih !');
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        try {
            User::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'password' => $password,
                ]);

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal update profile!');
            return back();
        }
        
        try {
            $foto_profil  = $request->file('foto_profil');
            if (!is_null($foto_profil)) {
                $extension = $request->file('foto_profil')->extension();
                $imgname = date('dmyHis').'.'.$extension;
                $this->validate($request, ['foto_profil' => 'required|file|max:5000']);
                $path = Storage::putFileAs('public/images/profil', $request->file('foto_profil'), $imgname);

                // Delete previous profile image if it exists
                $previousImage = $User->foto_profil;
                if ($previousImage && Storage::exists('public/images/profil/' . $previousImage)) {
                    Storage::delete('public/images/profil/' . $previousImage);
                }

                User::where('id',$id)
                    ->update([
                        'foto_profil' => $imgname,
                    ]);
            }

        } catch (\Illuminate\Database\QueryException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (ModelNotFoundException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (\Exception $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (PDOException $e) {
            Alert::error('Gagal update profile!');
            return back();
        } catch (Throwable $e) {
            Alert::error('Gagal update profile!');
            return back();
        }

        Alert::success('Sukses', 'Update profile berhasil');
        return back();
    }

}