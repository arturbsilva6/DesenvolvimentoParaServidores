/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package p1;

/**
 *
 * @author Arturbsilva
 */
public class P1 {

        public static void main(String[] args) {
            
            Cartao Carlos = new Cartao();
            
            Carlos.setNome("Carlos");
            Carlos.setCpf(250012453);
            Carlos.setSaldo(3000);
            Carlos.setData("20/08/2018");
            Carlos.setCreditoCartao(8000);
            Carlos.setNConta(1208);
            Carlos.setCodigoVericacao(5554432);
            Carlos.setAgencia("Itaú");
            Carlos.setEndereço("18220675");
            Carlos.setValidadeCartao("20/08/2028");
            Carlos.setNCartao(13025);
            
            
          Carlos.VerificarConta();
          System.out.println("Seu credito total é " + Carlos.VerificarSaldo());
          System.out.println("Seu credito com desconto é  " + Carlos.VerificarSaldo(6));
           
    
    }
    
}
