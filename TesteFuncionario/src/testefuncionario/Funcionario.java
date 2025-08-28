/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package testefuncionario;


public class Funcionario {
    
    String nomeFuncionario;
    double salariofuncionario;
    
   double aumentoSalario(double aumento){
       
       return this.salariofuncionario += aumento;
       
   }
   
   void consultaFuncionario(){
       
       System.out.println("Nome: " + this.nomeFuncionario);
       System.out.println("Novo Salario: " + this.salariofuncionario);
   }
}
