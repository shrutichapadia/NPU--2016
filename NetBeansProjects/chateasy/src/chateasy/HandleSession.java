/*


 * Student Info: Name=ChapadiaShruti, ID=15574CS

 * Subject: CS532(B)_HWN3_Summer_2016

 * Author: shruti

 * Filename: HandleSession.java

 * Date and Time: Jul 8, 2016 10:45:07 PM

 * Project Name: chateasy


 */
/**
 *
 * @author shruti
 *
package chateasy;

import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import static java.lang.Thread.sleep;
import java.net.Socket;

/**
 *
 * @author shruti
 */
public class HandleSession implements Runnable, chateasyconstants {
    
    private Socket user1;
    private Socket user2;
    
    private char [][] cell = new char[2][1];
    
    private DataInputStream fromuser1;
    private DataOutputStream touser1;
    private DataInputStream fromuser2;
    private DataOutputStream touser2;
    
    //Continue to chat
    private boolean continuetoChat = true;
    
    //create thread
    public HandleSession(Socket user1, Socket user2){
        this.user1 = user1;
        this.user2 = user2;
        
        for(int i=0; i<3;i++){
        for(int j=0; j<=3;j++){
            cell[i][j] ='0';
        }
        
        }
    }
    public void run(){
     try{
         
         DataInputStream fromuser1 = new DataInputStream(
         user1.getInputStream());
         DataOutputStream touser1 = new DataOutputStream(
         user1.getOutputStream());
         DataInputStream fromuser2 = new DataInputStream(
         user2.getInputStream());
         DataOutputStream touser2 = new DataOutputStream(
         user2.getOutputStream());
         
         touser1.writeInt(1);
         
         while(true){
             String row = fromuser1.readUTF();
             String column = fromuser1.readUTF();
            //cell[row][column]=""; 
         
         if(isChat("on")){
                 String user1_chat = null;
             
             touser1.writeUTF(user1_chat);
             touser2.writeUTF(user1_chat);
             sendMessage(touser2,row,column);
             break;
//             else if(isIdeal("quit")){
//                   touser1.writeUTF(quit);
//                   touser2.writeUTF(quit);
//                   sendMessage(touser2,row,column);
//                     break;
         } else 
                 touser2.writeUTF("Continue");
             String user2_chat = null;
             touser1.writeUTF(user2_chat);
             touser2.writeUTF(user2_chat);
             sendMessage(touser1,row,column);

         }
 
     } catch(IOException ex){
     System.err.println(ex);}
    
    
    }
    
    
   
    

    private void sendMessage(DataOutputStream out, String row, String column) throws IOException{
    out.writeUTF(row);
    out.writeUTF(column);}
    
  
    private boolean isChat(String hello) throws IOException {

       return true;
    }
    
}
