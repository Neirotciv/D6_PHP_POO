<?php

namespace Service;

use App\Entity\Student;
use App\Entity\Teacher;
use Service\PersonServiceInterface;

require_once './Interface/PersonServiceInterface.php';
require_once '../Entity/Student.php';
require_once '../Entity/Teacher.php';

class PersonService implements PersonServiceInterface
{
    public function createTeacher(string $name, string $lastname, string $email, string $password)
    {
        $teacher = new Teacher($name, $lastname, $email, $password);
        return $teacher;
    }

    public function readTeacher(string $email, array $teachers)
    {
        foreach ($teachers as $teacher) {
            if ($teacher->getEmail === $email) {
                return $teacher;
            }
        }
        return null;
    }

    public function updateTeacher(Teacher $teacher, string $name, string $lastname, string $email, string $password)
    {
        $teacher->setName($name);
        $teacher->setLastname($lastname);
        $teacher->setEmail($email);
        $teacher->setPassword($password);
        return $teacher;
    }

    public function deleteTeacher(string $email, array $teachers)
    {
        $teacher = $this->readTeacher($email, $teachers);
        if ($teacher !== null) {
            unset($teacher);
        }
    }

    public function createStudent(string $name, string $lastname, string $email, string $password)
    {
        $teacher = new Teacher($name, $lastname, $email, $password);
        return $teacher;
    }

    public function readStudent(string $email, array $students)
    {
        foreach ($students as $student) {
            if ($student->getEmail === $email) {
                return $student;
            }
        }
        return null;
    }

    public function updateStudent(Student $student, string $name, string $lastname, string $email, string $password)
    {
        $student->setName($name);
        $student->setLastname($lastname);
        $student->setEmail($email);
        $student->setPassword($password);
    }

    public function deleteStudent(string $email, array $students)
    {
        $student = $this->readStudent($email, $students);
        if ($student !== null) {
            unset($student);
        }
    }
}
