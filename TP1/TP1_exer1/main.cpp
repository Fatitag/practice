#include <iostream>

using namespace std;

int main()

{
    char x,y;


    cout << "Ecrire tun caractere" << endl;
    cin >> x;


    if(x>='A' && x<='Z' ){
    cout << "lettre est majuscule" << endl;
    y=x+32;
    cout << "lettre  minuscule est : "<<y << endl;
    }
    else{
       cout << "erreur" << endl;
    }
    return 0;
}

