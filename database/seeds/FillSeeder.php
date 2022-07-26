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
            ['id' => 1, 'title' => 'Best Man','description' => "The best man is the groom's right-hand man at the wedding. This person is asked to stand by the groom's side to support and assist in any way possible before and during the wedding.", 'image' => 'https://media.istockphoto.com/photos/best-man-standing-with-hand-on-grooms-back-picture-id451420027?k=20&m=451420027&s=612x612&w=0&h=c-EcHXQ51f842ivGrBPbjSTGUfSirx7KSVG8SFtfnVE='],
            ['id' => 2, 'title' => 'Groomsman', 'description' => 'A groomsman or usher is one of the male attendants to the groom in a wedding ceremony. Usually, the groom selects close friends and relatives to serve as groomsmen, and it is considered an honor to be selected', 'image' => 'https://southernweddings.com/wp-content/uploads/2016/03/hkline.jpg']
        ];

        foreach($item as $i)
            AssignmentItem::create($i);
        
        $person = [
            ['lastname' => 'Pasion','firstname' => 'Ericson', 'nickname' => 'Kuya Eric', 'gender' => 'M', 'is_bestman' => 1, 'message' => "Kuya, ever since the day we've met, I've always looked up on you. You are a great thinker, hardworking and the most humble person I've ever met. You are a family person, and you have treated me and Steff like a family too. As one of the pillars of our relationship, may I ask you to be one of my best man on our wedding day?"],
            ['lastname' => 'Cleofas','firstname' => 'Francis Roel', 'nickname' => 'Kuya Francis', 'gender' => 'M', 'is_bestman' => 1, 'message' => "Kuya, you're the type of person who would go an extra mile for your love ones and doing what you love without an inch of regret. I've always liked your Alpha style, so kuya, as one of the pillars of our relationship can I ask you to be one of my best man on our wedding day?"],
            ['lastname' => 'Lorenzo','firstname' => 'Ralph James', 'nickname' => 'RJ', 'gender' => 'M', 'is_bestman' => 1, 'message' => "Adeng, sika met lang ti kaanusan nga amammu mi ket atem, thank you ti ananus. Thank you most for being there for your ate. I am lucky we have a person like you, we're proud of you. So, be one of my best man on our wedding day, okay?"],
            ['lastname' => 'Lucas','firstname' => 'Kelvin', 'nickname' => 'Kelvs', 'gender' => 'M', 'is_bestman' => 2, 'message' => "Uiy, bes! Agkasar kamin, haan da ka pay nakikita haha. You're that one person who would be always there for us, in good times and in bad, no if's and but's, your'e just a call away, and I would want you to be in our special day as one of my grooms men, so will you accept?"],
            ['lastname' => 'Silvestre','firstname' => 'Marl Emmanuel', 'nickname' => 'Popo', 'gender' => 'M', 'is_bestman' => 2, 'message' => "Ana bro, umununa kami agkasaren hehe I have always considered our Barkada my extended family and as one of my brother's in friendship, represent the KSJB boys as one of my grooms men wa, thanks brother!"],
            ['lastname' => 'Padamada','firstname' => 'Jericho', 'nickname' => 'Eco', 'gender' => 'M', 'is_bestman' => 2 , 'message' => 'Eco, since childhoold, you were always the person I know I can rely on, even now, I know I can still depend on you. You might not see it but I know, you always got my back. Be there on our wedding as one of my grooms men, mabalin? hehe'],
            ['lastname' => 'Puyaoan','firstname' => 'Clydewynn', 'nickname' => 'Clyde', 'gender' => 'M', 'is_bestman' => 2 , 'message' => "Late night UNO, Monopoly, High Jacks, Killer Killer and Tekken is much fun with you guys around, represent the Support Group boys as one of my grooms men, wa? Thanks bro!"]
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
                'assignment' => $p['is_bestman'],
                'message' => $p['message']
            ]);
        }
    }
}
