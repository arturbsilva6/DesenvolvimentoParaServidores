/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package p1;

/**
 *
 * @author Arturbsilva
 */
public class Cliente {
    
    private String Nome;
    private String data;
    private int NConta;
    private double Cpf;
    private String Endereço;
    private double Saldo;
    private String Agencia;

    public String getAgencia() {
        return Agencia;
    }

    public void setAgencia(String Agencia) {
        this.Agencia = Agencia;
    }

    public double getSaldo() {
        return Saldo;
    }

    public void setSaldo(double Saldo) {
        this.Saldo = Saldo;
    }

    public String getNome() {
        return Nome;
    }

    public void setNome(String Nome) {
        this.Nome = Nome;
    }

    public String getData() {
        return data;
    }

    public void setData(String data) {
        this.data = data;
    }

    public int getNConta() {
        return NConta;
    }

    public void setNConta(int NConta) {
        this.NConta = NConta;
    }

    public double getCpf() {
        return Cpf;
    }

    public void setCpf(double Cpf) {
        this.Cpf = Cpf;
    }

    public String getEndereço() {
        return Endereço;
    }

    public void setEndereço(String Endereço) {
        this.Endereço = Endereço;
    }
    
    
    public void VerificarConta (){
        
        System.out.println("Nome do cliente: " + this.Nome);
        System.out.println("CPF: " + this.Cpf);
        System.out.println("Saldo co cliente: " + this.Saldo);
        System.out.println("Numero do Conta: " + this.NConta);
        System.out.println("Endereço: " + this.Endereço);
        System.out.println("Agência: " + this.Agencia);
        System.out.println("Data de cadastro: " + this.data);
    }
    
    
}
