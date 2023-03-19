# D6 - JRI - TP POO
## Créer une application métier qui permet de gérer les cours ITAkademy:

- [x] Gérer les cours
    - [x] Déposer un devoir
    - [x] Déposer un cours
    - [x] Rendre un devoir
    - [x] Noter un devoir
    - [ ] Calculer la moyenne de l’élève
    - [ ] Calculer la moyenne de la classe
- [x] Gérer les étudiants
- [x] Gérer les enseignants
- [x] Se connecter / s’inscrire

### Critères dévaluation :
- [x] Surcharger une méthode
- [x] Override toString
- [x] Créer un héritage entre deux classes avec extends ou implements
- [x] Implémenter le pattern singleton
- [x] Utiliser l’encapsulation
- [x] Créer un helper

### Bonus

- [ ] Créer une API qui permet d’exporter toutes les notes (accès professeur)

### Aide
Un étudiant et un professeur :
- Ont des champs similaires (login, pwd, …) 🡪 Héritage à prévoir
- Ont accès à des services similaires et des services différents 🡪 Interface à prévoir

## Diagramme de classe

```mermaid
classDiagram
    direction LR
    class Person{
        -string name
        -string lastname
        -string email
        -string password
    }
    class Student {
        -array marks
    }
    class Assignment {
        -string title
        -string content
    }
    class Teacher {

    }
    class Course {
        -string title
        -string content
    }
   
    Person<|--Teacher
    Person<|--Student
    Student "1..*" -- "1" Classroom
    Teacher "1" -- "0..*" Assignment
    Teacher "1" -- "0..*" Course
    Classroom "0..*" -- "1" Teacher
    Classroom "1" -- "1..*" Course
    Classroom "1" -- "1..*" Assignment
```
## PHP serve
```bash
php -S localhost:8000 -t <path>\D6_PHP_POO\TP_POO\src
```