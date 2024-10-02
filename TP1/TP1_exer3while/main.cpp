#include <iostream>

using namespace std;

int main()

{
    int n,f,i;
    cout << "taper un entier n" << endl;
    cin >>n;
    if(n==0 || n==1){

        cout << n <<"!=1"<< endl;
    }else{
        i=1;
        f=1;
        while(i<=n){
            f=f*i;
            i=i+1;
        }
         cout <<n<< "!="<<f << endl;
    }

    return 0;
}
