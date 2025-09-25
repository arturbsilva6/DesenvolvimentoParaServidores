/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package p1;

/**
 *
 * @author Arturbsilva
 */
public class Cartao extends Cliente {
    
    private int NCartao;
    private int CodigoVericacao;
    private int CreditoCartao;
    private String ValidadeCartao;

    public int getNCartao() {
        return NCartao;
    }

    public void setNCartao(int NCartao) {
        this.NCartao = NCartao;
    }

    public int getCodigoVericacao() {
        return CodigoVericacao;
    }

    public void setCodigoVericacao(int CodigoVericacao) {
        this.CodigoVericacao = CodigoVericacao;
    }

    public int getCreditoCartao() {
        return CreditoCartao;
    }

    public void setCreditoCartao(int CreditoCartao) {
        this.CreditoCartao = CreditoCartao;
    }

    public String getValidadeCartao() {
        return ValidadeCartao;
    }

    public void setValidadeCartao(String ValidadeCartao) {
        this.ValidadeCartao = ValidadeCartao;
    }
    
    public void VerificarConta (){
        
        super.VerificarConta();
        
        System.out.println("Numero do Cartão: " + this.NCartao);
        System.out.println("Codigo do cartão: " + this.CodigoVericacao);
        System.out.println("Limite de Credito: " + this.CreditoCartao);
        System.out.println("Validade do cartão: " + this.ValidadeCartao);
    }
    
    public double VerificarSaldo(){
        
        return getSaldo() + getCreditoCartao();
        
    }
    
    public double VerificarSaldo(double Juros){
        
        return (VerificarSaldo() - (VerificarSaldo() * (Juros / 100)));
    
    }
    
        
    }
