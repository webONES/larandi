<?php 

class UsersController extends Controller
{

    public function index()
    {
        $csv = new CSVDataAccess();
        $data = $csv->read();
        $users = array();
        foreach ($data as $i => $d) {

            $user = new User(
                array(
                'firstName' => $d[0],
                'lastName'  => $d[1],
                'email'     => $d[2],
                'password'  => $d[3]
                )
            );

            array_push($users, $user);
        }
        View::make(
            'user.list', array(
            'users' => $users
            )
        );
    }

    public function add()
    {
        View::make('user.add');
    }

    public function store()
    {
        $user = new User(
            array(
            'firstName' => $_REQUEST['firstName'],
            'lastName'  => $_REQUEST['lastName'],
            'email'     => $_REQUEST['email'],
            'password'  => md5($_REQUEST['password'])
            )
        );
        $csv = new CSVDataAccess();
        $data = Model::__toArray($user);
        $csv->write($data);
        Redirect::to();
    }

    public function delete()
    {
        
    }

    public function modify()
    {
        
    }
}