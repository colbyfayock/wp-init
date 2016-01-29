<?

function getRandomEndorsements( $count = 1 ) {

    $random = array();

    $endorsements = getEndorsements();
    $randomKeys = array_rand($endorsements, $count);
    $keysCount = count($randomKeys);

    if ( $keysCount <= 1 ) {

        $random[] = $endorsements[$randomKeys];

    } else {

        for( $i = 0; $i < $keysCount; $i++ ) {
            $random[] = $endorsements[$randomKeys[$i]];
        }

    }

    return $random;

}

function getEndorsements() {

    $endorsements = array();

    $endorsements[] = array(
        'name'       => 'Richard Geller',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/4516707_1411597873.jpg',
        'occupation' => 'Divorce / Separation Lawyer',
        'location'   => 'Brooklyn, NY',
        'quote'      => 'I endorse Richard. Highly respected in the legal community with a strong reputation for client advocacy and dedication.',
    );

    $endorsements[] = array(
        'name'       => 'Casey Green',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/450805_1307922484.jpg',
        'occupation' => 'Business Attorney',
        'location'   => 'Philadelphia, PA',
        'quote'      => 'Rich has a broad base of knowledge and experience in various legal areas. I would not hesitate to refer potential commercial and individual clients to him.',
    );

    $endorsements[] = array(
        'name'       => 'Tara Kao',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/467727_1296293468.jpg',
        'occupation' => 'Litigation Lawyer',
        'location'   => 'Philadelphia, PA',
        'quote'      => 'I have had the pleasure of working with Rich Kim over the years. He works hard to get the best results for his clients. He really cares about them and looks out for their interest. I would recommend him to anyone.',
    );

    $endorsements[] = array(
        'name'       => 'Travis Richards',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/1590841_1309896314.jpg',
        'occupation' => 'Chapter 7 Bankruptcy Attorney',
        'location'   => 'Mount Holly, NJ',
        'quote'      => 'I endorse this lawyer. Gets results.',
    );

    $endorsements[] = array(
        'name'       => 'Sean Cleary',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/3599100_1363278391.jpg',
        'occupation' => 'Car / Auto Accident Lawyer',
        'location'   => 'Miami, FL',
        'quote'      => 'I endorse this lawyer. A highly skilled and respected lawyer in the legal community.',
    );

    $endorsements[] = array(
        'name'       => 'John Iannozzi',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/414572_1391881090.jpg',
        'occupation' => 'Personal Injury Lawyer',
        'location'   => 'Perkasie, PA',
        'quote'      => 'Attorney Kim is a talented litigator. He is always well prepared and is a tough advocate for his clients. He\'s compasionate with his clients, and well respected in the legal community. I strongly recommend Attorney Kim.',
    );

    $endorsements[] = array(
        'name'       => 'David Promisloff',
        'img'        => false,
        'occupation' => 'Class Action Attorney',
        'location'   => 'Berwyn, PA',
        'quote'      => 'Excellent attorney. Impressive critical thinking skills, and always highly focused on the matter at hand. We previously worked in different departments of the same firm, and I would often consult him on relevant matters that arose in my practice area. Highest recommendation.',
    );

    $endorsements[] = array(
        'name'       => 'Howard Siegrist',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/760599_1397423669.jpg',
        'occupation' => 'Criminal Defense Attorney',
        'location'   => 'Farmington Hills, MI',
        'quote'      => 'I endorse this lawyer.',
    );

    $endorsements[] = array(
        'name'       => 'Maria Henderson',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/1235963_1395952255.jpg',
        'occupation' => 'Family Law Attorney',
        'location'   => 'Melbourne, FL',
        'quote'      => 'Highly respected lawyer in the community.',
    );

    $endorsements[] = array(
        'name'       => 'John O\'Brien',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/119125_1297797029.jpg',
        'occupation' => 'Personal Injury Lawyer',
        'location'   => 'Elk Grove, CA',
        'quote'      => 'I endorse this lawyer. A highly skilled and respected lawyer in the legal community.',
    );

    $endorsements[] = array(
        'name'       => 'Ryan Boland',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/423077_1259211796.jpg',
        'occupation' => 'Lawyer',
        'location'   => 'Philadelphia, PA',
        'quote'      => 'Rich is an extremely bright and talented litigator. The breadth of his litigation experience makes him well prepared to handle complex and high stakes litigation. He\'s compasionate with clients, yet fights very aggressively on their behalf. I would recommend Rich in a heartbeat.',
    );

    $endorsements[] = array(
        'name'       => 'Allison Hamilton',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/84505_1387475011.jpg',
        'occupation' => 'Mediation Attorney',
        'location'   => 'Katy, TX',
        'quote'      => 'I endorse Richard Kim. Attorneys and judges alike respect him. He is a valuable asset to the legal community.',
    );

    $endorsements[] = array(
        'name'       => 'Christian Lassen',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/1580478_1411513897.jpg',
        'occupation' => 'Personal Injury Lawyer',
        'location'   => 'Philadelphia, PA',
        'quote'      => 'I endorse this lawyer.',
    );

    $endorsements[] = array(
        'name'       => 'Jeffrey Ciarlanto',
        'img'        => false,
        'occupation' => 'Securities / Investment Fraud Attorney',
        'location'   => 'Berwyn, PA',
        'quote'      => 'Rich is a highly intelligent, engaging, and hardworking attorney. I have worked with him many times over the years and I give him my highest endorsement.',
    );

    $endorsements[] = array(
        'name'       => 'Ligaya Hernandez',
        'img'        => false,
        'occupation' => 'Litigation Lawyer',
        'location'   => 'Jenkintown, PA',
        'quote'      => 'Rich is a results drive attorney, who balances aggressive representation with the ability to negotiate matters in the best interests of his clients',
    );

    $endorsements[] = array(
        'name'       => 'Daniel Baylson',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/1585396_1394636561.jpg',
        'occupation' => 'Employment / Labor Attorney',
        'location'   => 'Cherry Hill, NJ',
        'quote'      => 'I endorse this lawyer.',
    );

    $endorsements[] = array(
        'name'       => 'Richard Mosback',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/1624057_1394556735.jpg',
        'occupation' => 'Litigation Lawyer',
        'location'   => 'Philadelphia, PA',
        'quote'      => 'Rich is a true professional. Experienced, personable and takes a genuine personal interest in his clients\' legal matters.',
    );

    $endorsements[] = array(
        'name'       => 'Paul Lang',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/1843148_1328221817.jpg',
        'occupation' => 'Bankruptcy Attorney',
        'location'   => 'Bensalem, PA',
        'quote'      => 'Whip smart and personable. Richard is attentive to client\'s needs and aggressive on their behalf. He tirelessly represents people and wins. I trust him with all of my clients.',
    );

    $endorsements[] = array(
        'name'       => 'Stefanie Anderson',
        'img'        => false,
        'occupation' => 'Litigation Lawyer',
        'location'   => 'Blue Bell, PA',
        'quote'      => 'I endorse this lawyer.',
    );

    $endorsements[] = array(
        'name'       => 'Gregory Kallet',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/476159_1259211857.jpg',
        'occupation' => 'Health Care Lawyer',
        'location'   => 'Philadelphia, PA',
        'quote'      => 'Having worked with Rich for many years, he is a thoughtful, intelligent and aggressive advocate. His business and litigation backgrounds provide him with a unique and powerful skill set, and I would recommend him to any potential client.',
    );

    $endorsements[] = array(
        'name'       => 'Daniel Rosenberg',
        'img'        => 'http://headshots.iavvo.com/avvo/ugc/images/head_shot/standard/548118_1384197453.jpg',
        'occupation' => 'Criminal Defense Attorney',
        'location'   => 'Mount Holly, NJ',
        'quote'      => 'I have worked with Mr. Kim on various civil litigation matters and have always found him to be well prepared and diligent. He is extremely knowledgeable in the practice of civil litigation and has a reputation for achieving favorable results for his clients. I would endorse Richard Kim for your civil litigation needs.',
    );

    return $endorsements;

}