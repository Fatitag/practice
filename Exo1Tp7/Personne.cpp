#include <iostream>
#include "Personne.h"
using namespace std;
#include <string.h>

Personne::Personne(){
Nom=new char[20];
strcpy(Nom,'AA');
Prenom=new char[20];
strcpy(Prenom,'AZERTY');
age=20;}
Personne::Personne(const char*N,const char*P,int a){
    Nom=new char[strlen(N)+1];
    strcpy(Nom,N);
    Prenom=new char[strlen(N)+1];
    strcpy(Prenom,P);
    age=a;
}
Personne::Personne(){
    delete[]Nom;
    delete[]Prenom;
}
void Personne:affiche()const{
    cout<<"Nom"<<Nom<<endl;
    cout<<"Prenom"<<Prenom<<endl;
    cout<<"Age"<<age<<endl;
}

