#include <iostream>
#include <iomanip>
using namespace std;

int main()

{
    int i,n;
    double U;

    cout << "taper le nb des iteration :" << endl;
    cin >>n;
    U=1;
    for(i=1;i<=n;i++){
//Cst en 5 va commancer de stabiliser et donner la valeur exacte de racine 2
        U = (U + 2/U) / 2;
         cout <<"pour i= "<<i<<" le resultat est :"<< setprecision(50)<< U<< endl;
    }

    return 0;
}
