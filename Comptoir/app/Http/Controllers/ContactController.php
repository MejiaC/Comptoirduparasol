class ContactController extends BaseController {

 public function getContact(){
 
            return View::make('contact');
        }
 
        //Contact Form
        public function getContactUsForm(){
 
            //Get all the data and store it inside Store Variable
            $data = Input::all();
 
            //Validation rules
            $rules = array (
                'prenom' => 'required|alpha',
                'nom' => 'required|alpha',
                'telephone'=>'numeric|min:8',
                'email' => 'required|email',
                'informations' => 'required|min:25'
            );
 
            //Validate data
            $validator  = Validator::make ($data, $rules);
 
            //If everything is correct than run passes.
            if ($validator -> passes()){
 
                //Send email using Laravel send function
                Mail::send('emails.hello', $data, function($message) use ($data)
                {
//email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['first_name']);
//email 'To' field: change this to emails that you want to be notified.                    
$message->to('miguel.mejia.cifuentes@gmail.com', 'my name')->cc('miguel.mejia.cifuentesws@gmail.com')->subject('contact request');
 
                });
 
                return View::make('contact');  
            }else{
//return contact form with errors
                return Redirect::to('/contact')->withErrors($validator);
            }
        }
}