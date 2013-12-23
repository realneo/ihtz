<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'index';
}

//meta tags pages start here

if($page == 'index'){
    echo  "
                <meta name='title' content='Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania is a UK registered charity with an office in Dar Es Salaam established in 2007. Islamic Help is determined to make a difference to the lives of those afflicted in poverty and suffering'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
              ";
}

if($page == 'about'){
    echo "
                <meta name='title' content='About - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania is a UK registered charity with an office in Dar es salaam established in 2007. Islamic Help is determined to make a difference to the lives of those afflicted in poverty and suffering'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'contact'){
    echo "
                <meta name='title' content='Contact - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='We can be contacted through various methods. If you are unsure, or need an immediate response, please do not hesitate to call us on either of our office numbers.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'donate'){
    echo "
                <meta name='title' content='Donating - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania currently offers a number of different donation methods and donation price handles. Please visit our donating page to learn how to make a donation today.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'volunteer'){
    echo "
                <meta name='title' content='Volunteer - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Volunteers form a cornerstone of Islamic Help Tanzania and are fundamental to the work of the organisation. Volunteer today and become part of Islamic Helps journey in making a difference. '>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'mission'){
    echo "
                <meta name='title' content='Mission Possible - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Mission Possible is a UK based expedition which gives volunteers a full spectrum of the humanitarian aid delivery process and involves campaigning, fundraising and a deployment in Tanzania of up to 10 days.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'smallhands'){
    echo "
                <meta name='title' content='Small Hands - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania’s Small Hands project integrates children of different backgrounds, races, religion or status and provides them with an objective that promotes team-work and education.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'qurbani'){
    echo "
                <meta name='title' content='Qurbani - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content=' Islamic Help Tanzania is now providing Qurbani. The project targets all the orphans who are directly registered with the organisation and their immediate siblings, relatives and other people in Islamic Help’s operational areas. '>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'water'){
    echo "
                <meta name='title' content='Tone La Haruma - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania has been providing water solutions in the form of water pumps, wells, rain (roof) harvesting, solar powered boreholes, establishment of harims and water conservation and hygiene education since 2009.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'tfc'){
    echo "
                <meta name='title' content='Trees For Change - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania has launched a major tree planting campaign, Trees for Change. About 30,000 trees of different species, including fruit trees, will be planted and distributed in villages. '>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'eco_mosque'){
    echo "
                <meta name='title' content='Eco Mosque - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='One of the outstanding features of Islamic Help Tanzania’s Children’s Eco Village is the Eco Mosque, believed to be the first of its type in Africa'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'orphans'){
    echo "
                <meta name='title' content='Orphan Care - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania is a UK registered charity with an office in Dar es salaam established in 2007. Islamic Help is Determined to make a difference to the lives of those afflicted in poverty and suffering'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'eco_village'){
    echo "
                <meta name='title' content='Children’s Village - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='In March 2012, Islamic Help Tanzania started an exciting and innovative 3-year building project in Tanzania to support 160 orphans and vulnerable children. '>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";
}if($page == 'economic'){
    echo "
                <meta name='title' content='Economic Empowerment - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='In 2012, Islamic Help Tanzania initiated Economic Empowerment projects, livelihoods project targeting mainly women in economic poor and vulnerable communities.

'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";

}if($page == 'food'){
    echo "
                <meta name='title' content='Food Security - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania is currently trying to solve food insecurities faced by the coastal region of Tanzania. '>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";}

if($page == 'education'){
    echo "
                <meta name='title' content='Education & Training - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania believes education must keep pace with the rapid globalisation of our society over the last few decades in order to break the cycle of poverty that so many are ensnared in.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";}

if($page == 'jangwani'){
    echo "
                <meta name='title' content='Jangwani Floods 2010 - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania supported and helped 2,000-2,500 people, almost 20% of the total people affected by the Jangwani Floods in Dar Es Salaam in 2010.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";}

if($page == 'somalia'){
    echo "
                <meta name='title' content='Somalia Droughts 2011 - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania agreed on a joint intervention in Somalia with Somali Relief and Development Forum (SRDF), Programme on Life Emergency (POLE) and various local organisations in order to aid people suffering from the droughts.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";}

if($page == 'vacancies'){
    echo "
                <meta name='title' content='Vacancies - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania is a UK registered charity with an office in Dar es salaam established in 2007. Islamic Help is Determined to make a difference to the lives of those afflicted in poverty and suffering'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";}

if($page == 'cordoba'){
    echo "
                <meta name='title' content='Co&rsquo;rdoba School - Islamic Help Tanzania'>
                <meta name='topic' content='*'>
                <meta name='description' content='Islamic Help Tanzania opened The Co&rsquo;rdoba International School as a separate entity from Islamic Help where the schools income and profits will provide a self sustainable solution to Islamic Help Tanzania.'>
                <meta name='keywords' content='Projects,How  to get involved,mission possible,sponsor an orphan'>
                <meta name='author' content='Commmunications Department Tanzania 2011-2013'>
                <meta name='revisit-after' content='3 days'>
                <meta name='robots' Content='index, follow'>
                ";}

        // One Line Comment

        /*
         * Multiple Line COmment
         */

?>