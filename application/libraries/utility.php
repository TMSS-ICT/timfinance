<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Utility
{

    public function family_name()
    {
        $family_name = array(
            0 => "খান",
            1 => "মোল্লা",
            2 => "শেখ",
            3 => "মণ্ডল",
            4 => "সর্দার",
            5 => "চৌধুরী"
        );
    }

    public function name_title()
    {
        $name_title = array(
            0 => "মোঃ",
            1 => "মোছাঃ",
            2 => "শ্রী",
            3 => "শ্রীমতী"
        );
    }

    public function father_name_title()
    {
        $father_name_title = array(
            0 => "মোঃ",
            1 => "মৃত",
            2 => "শ্রী"
        );
    }

    public function mother_name_title()
    {
        $mother_name_title = array(
            0 => "মোছাঃ",
            1 => "মৃত",
            2 => "শ্রীমতী"
        );
    }

    public function age()
    {
        $age[]=array();
        $age[0]=1;
        for($i=1;$i<100;$i++)
        {
            $age[$i]=$i+1;
        }

    }

    public function family_member()
    {
        $family_member[]=array();
        $family_member[0]=2;
        for($i=1;$i<30;$i++)
        {
            $family_member[$i]=$i+1;
        }

    }

    public function passing_year()
    {
        $passing_year[]=array();
        $passing_year[0]=1950;
        for($i=1950;$i<2050;$i++)
        {
            $passing_year[$i]=$i+1;
        }
    }
}
?>