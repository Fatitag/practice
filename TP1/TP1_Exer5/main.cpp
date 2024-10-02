#include <iostream>
#include <cmath>
using namespace std;

int main()

{
    int a,b,c;
    float x1,x2,D;
    cout << "Entrer trois valeur de a,b et c" << endl;
    cin >>a>>b>>c;
    if(a==0){
        if(b==0){
            if(c==0){
                cout<<"L'ensemble de solution est IR";
            }
            else{
                cout<<"L'ensemble vide";
            }
        }else{
            x1=-c/b;
            cout<<"La solution est :"<<x1;
        }
    }else{
        D=(b*b)-(4*a*c);
        if(D>0){
            x1=(-b-sqrt(D))/(2*a);
            x2=(-b+sqrt(D))/(2*a);
            cout<<"L equation admit deux solution sont :"<<endl<<" X1="<<x1<<" et X2="<<x2;
        }else if(D=0){
        x1=-b/(2*a);
        cout<<"la solution est :"<<x1;
        }else{
            cout<<"Pas de solution reel";
        }
    }
    return 0;
}
