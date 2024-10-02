#include <iostream>

using namespace std;

int main()
{
    int a,N,i,S,P;
     S=0;
     P=1;


    cout << "Taper un entier N : ";
    cin >> N;

     for(i=1;i<=N;i++){
        cout << "a"<<i<<": ";
        cin >> a;
         S=S+a;
         P=P*a;
     }



    cout<<"La somme est:"<<S <<endl;
    cout<<"Le produit est:"<<P<<endl;
    cout<<"La moyenne est:"<<(float)S/N<<endl;

    return 0;
}
