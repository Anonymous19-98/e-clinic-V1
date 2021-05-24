#include <iostream>
#include <cstdio>
using namespace std;

int main() {
    int in;
    string value[9] = {"one", "two", "three", "four"
                        "five", "six", "seven", "eight", "nine"};
    string evenOdd[2] = {"even", "odd"};

    for(int i = 0; i<2; i++){
        cin >> in;
        if(in > 9){
            cin >> in;
            if(in %2 == 0){
                cout << evenOdd[0]<<endl;
            }
            else{
                cout << evenOdd[1]<<endl;                
            }
        }
        else{
            cout << value[in] <<endl;
        }
    }
    return 0;
}