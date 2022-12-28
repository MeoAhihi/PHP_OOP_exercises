<?php

namespace VTCA;
class VTCA_Student
{
    private $student_code, $student_name, $C_mark, $SQLite_mark, $Csharp_mark;

    public function getcode()
    {
        return $this->student_code;
    }

    public function setcode($value)
    {
        $this->student_code = $value;
    }

    public function getname()
    {
        return $this->student_name;
    }

    public function setname($value)
    {
        $this->student_name = $value;
    }

    public function getCmark()
    {
        return $this->Csharp_mark;
    }

    public function setCmark($value)
    {
        $this->Csharp_mark = ($value < 0 or $value > 10) ? 0 : $value;
    }

    public function getSQLitemark()
    {
        return $this->SQLite_mark;
    }

    public function setSQLitemark($value)
    {
        $this->SQLite_mark = ($value < 0 or $value > 10) ? 0 : $value;
    }

    public function getCsharpmark()
    {
        return $this->Csharp_mark;
    }

    public function setCsharpmark($value)
    {
        $this->Csharp_mark = ($value < 0 or $value > 10) ? 0 : $value;
    }

    public function __construct($student_code, $student_name, $C_mark, $SQLite_mark, $Csharp_mark)
    {
        $this->student_code = $student_code;
        $this->student_name = $student_name;
        $this->C_mark = $C_mark;
        $this->SQLite_mark = $SQLite_mark;
        $this->Csharp_mark = $Csharp_mark;
    }

    public function avg_mark()
    {
        return ($this->C_mark + $this->SQLite_mark + $this->Csharp_mark) / 3;
    }

    public function __toString()
    {
        return "[$this->student_code]$this->student_name (C: $this->C_mark, SQLite: $this->SQLite_mark, C#: $this->Csharp_mark)";
    }
}