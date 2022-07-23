<?php

use Illuminate\Database\Seeder;
use App\Person;
use App\User;
use App\Assignment;
use App\AssignmentItem;
use Illuminate\Support\Str;

class FillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            ['id' => 1, 'title' => 'Best Man','description' => "The best man is the groom's right-hand man (or woman) at the wedding. Usually a close friend or relative, this person is asked to stand by the groom's side to support and assist in any way possible before and during the wedding.", 'image' => 'https://media.istockphoto.com/photos/best-man-standing-with-hand-on-grooms-back-picture-id451420027?k=20&m=451420027&s=612x612&w=0&h=c-EcHXQ51f842ivGrBPbjSTGUfSirx7KSVG8SFtfnVE='],
            ['id' => 2, 'title' => 'Groomsman', 'description' => 'A groomsman or usher is one of the male attendants to the groom in a wedding ceremony and performs the first speech at the wedding. Usually, the groom selects close friends and relatives to serve as groomsmen, and it is considered an honor to be selected', 'image' => 'https://southernweddings.com/wp-content/uploads/2016/03/hkline.jpg']
        ];
        $person = [
            ['lastname' => 'Pasion','firstname' => 'Ericson', 'nickname' => 'Kuya Eric', 'gender' => 'M', 'is_bestman' => 1],
            ['lastname' => 'Cleofas','firstname' => 'Francis Roel', 'nickname' => 'Kuya Francis', 'gender' => 'M', 'is_bestman' => 1],
            ['lastname' => 'Lorenzo','firstname' => 'Ralph James', 'nickname' => 'RJ', 'gender' => 'M', 'is_bestman' => 1],
            ['lastname' => 'Lucas','firstname' => 'Kelvin', 'nickname' => 'Kelly', 'gender' => 'M', 'is_bestman' => 2],
            ['lastname' => 'Reyno','firstname' => 'Gerard', 'nickname' => 'Gege', 'gender' => 'M', 'is_bestman' => 2],
            ['lastname' => 'Silvestre','firstname' => 'Marl Emmanuel', 'nickname' => 'Popo', 'gender' => 'M', 'is_bestman' => 2],
            ['lastname' => 'Padamada','firstname' => 'Jericho', 'nickname' => 'Eco', 'gender' => 'M', 'is_bestman' => 2]
        ];

        foreach($person as $p) {
            $pObj = Person::create([
                'lastname' => $p['lastname'],
                'firstname' => $p['firstname'],
                'nickname' => $p['nickname'],
                'gender' => $p['gender']
            ]);
            $code = Str::upper(Str::random(4));
            
            while(User::where('code',$code)->count()==0) {
                User::create([
                    'code' => $code,
                    'person' => $pObj->id
                ]);
                break;
            }
            Assignment::create([
                'person' => $pObj->id,
                'assignment' => $p['is_bestman']
            ]);
        }
    }
}
