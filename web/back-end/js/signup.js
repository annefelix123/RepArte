function criarID(tamanho) 
{
    let tamanho = 8
    const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    let resultado = "";
    for (let i = 0; i < tamanho; i++) 
    {
      resultado += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return resulto;
    document.write(resultado);

}