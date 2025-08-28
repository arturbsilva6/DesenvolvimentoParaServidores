/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package testefuncionario;

public class TesteFuncionario {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
      Funcionario efetivado = new Funcionario();
      Funcionario estagiario = new Funcionario();
      
      efetivado.nomeFuncionario = "Jose";
      efetivado.salariofuncionario = 2000;
      
      estagiario.nomeFuncionario = "Matheus";
      estagiario.salariofuncionario = 1200;
      
      System.out.println("Nome: " + efetivado.nomeFuncionario );
      System.out.println("Salario: " + efetivado.salariofuncionario);
      
      System.out.println("Nome: " + estagiario.nomeFuncionario );
      System.out.println("Salario: " + estagiario.salariofuncionario);
      
      efetivado.aumentoSalario(500);
      efetivado.consultaFuncionario();
      
      estagiario.aumentoSalario(100);
      estagiario.consultaFuncionario();
      
      
   
    }
    
    
}
