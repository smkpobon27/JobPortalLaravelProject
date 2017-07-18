<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = route('reg_stp_2');
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    //------------------This method's are overrided---------------------------------
   
    //show Employer registration form
    public function showEmployerRegistrationForm()
    {
        return view('employer.employer_register_stp_1');
    }
    /**
     * Show Job Seeker registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSeekerRegistrationForm()
    {
        return view('jobseeker.seeker_register_stp1');
    }
    
    //Handle Employer registration
     public function employerRegister(Request $request)
    {
        $this->employerValidator($request->all())->validate();

        event(new Registered($user = $this->employerCreate($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect()->route('employer.company_profile');
    }
    //Handle Job Seeker registration
     public function seekerRegister(Request $request)
    {
        $this->seekerValidator($request->all())->validate();
    
        event(new Registered($user = $this->seekerCreate($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect()->route('reg_stp_2');//this will redirect the route 
                            //to where i want to redirect after jobseeker registration 
                                //with logged in
    }
    
//---------------------------------------------------------------------
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //Employer validator
    protected function employerValidator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|min: 9',
        ]);
    }
    //Job seeker validator
    protected function seekerValidator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    //Employer create method
    protected function employerCreate(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'employer' => $data['employer'],
        ]);
    }
     //Job seeker create method
    protected function seekerCreate(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'seeker' => $data['seeker'],
        ]);
    }
}
