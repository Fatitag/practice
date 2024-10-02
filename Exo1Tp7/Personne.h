
#ifndef PERSONNE_H
#define PERSONNE_H
#include <iostream>
using namespace std;

//compilation
class Personne
{
    public:
Point();
    Personne();
    Personne(const char*,const char*,int);
    ~Personne();//desctructeur
    void affiche()const;

private:
    char * Nom; //attribut d'objet ou instance
    char * Prenom;
    int age;

};

#endif 
