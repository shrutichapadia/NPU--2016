
import java.io.DataOutputStream;
import java.net.ServerSocket;
import java.io.EOFException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectOutputStream;
import java.net.Socket;

/*


 * Student Info: Name=ChapadiaShruti, ID=15574CS

 * Subject: CS532(B)_HWN3_Summer_2016

 * Author: shruti

 * Filename: chatserver.java

 * Date and Time: Jul 8, 2016 10:44:35 AM

 * Project Name: ChatNow


 */
/**
 *
 * @author shruti
 */
public class chatserver {
    
    ServerSocket serverSocket;
    int session =1;
    public chatserver() throws IOException {
        this.serverSocket = new ServerSocket();
        Socket socket = serverSocket.accept();
    }
    
    Socket client1 = serverSocket.accept();
    Socket client2 = serverSocket.accept();
    public void run() throws IOException{
        String client = null;
        String s = client;
        Socket client1 = serverSocket.accept();
    new DataOutputStream(client1.getOutputStream()).writeChars(s);
    
    Socket client2 = serverSocket.accept();
     new DataOutputStream(client2.getOutputStream()).writeChars(s);
    
     session++;
    }

    HandleSession task = new HandleSession(client1,client2);
        
    
}

    
    

