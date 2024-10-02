#include <iostream>

using namespace std;

int main()
{  float P;
    int I,V,M,Q;
    cout << "Veuiller saisir I et V et Q" << endl;
    cin>>I>>V>>Q;


    if(Q<=V){
         P=(100*(float)V)/I;
         M=V/2;
         cout <<"le pourcentage de votants est: "<< P <<endl;
         cout << "Le nombre de voix de la majorit est :" << M<< endl;
    }else{
         cout <<"Vote n'est pas valable"<< endl;
    }


    return 0;
}
