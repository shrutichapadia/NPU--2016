
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.net.Socket;


/*


 * Student Info: Name=ChapadiaShruti, ID=15574CS

 * Subject: CS532(B)_HWN3_Summer_2016

 * Author: shruti

 * Filename: multithreadServer.java

 * Date and Time: Jul 8, 2016 12:10:04 PM

 * Project Name: ChatNow


 */
/**
 *
 * @author shruti
 */
public class multithreadServer {
   
    private Socket socket;
    public multithreadServer(Socket socket){
    
        this.socket= socket;
    }
    
    public void run(){
    
        try{
            
        DataInputStream inputFromClient = new DataInputStream(

        socket.getInputStream());

        DataOutputStream outputToClient = new DataOutputStream(

        socket.getOutputStream());
        
        while(true){
           char message = inputFromClient.readChar();
           
           outputToClient.writeChar(message);
        }
        }catch(IOException ex){}
    
    
    }

    

}
