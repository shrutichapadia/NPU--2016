
/*


 * Student Info: Name=ChapadiaShruti, ID=15574CS

 * Subject: CS532(B)_HWN3_Summer_2016

 * Author: shruti

 * Filename: chateasyserver.java

 * Date and Time: Jul 8, 2016 10:40:07 PM

 * Project Name: chateasy


 */
/**
 *
 * @author shruti
 */
package chateasy;

import java.awt.BorderLayout;
import java.io.DataOutputStream;
import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.Date;
import javax.swing.JFrame;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;

/**
 *
 * @author shruti
 */
public class chateasyserver extends JFrame implements chateasyconstants {
    
//    ServerSocket serverSocket;
//    int session =1;
    public chateasyserver() throws IOException {
        JTextArea jtaLog = new JTextArea();
        
        JScrollPane scrollpane = new JScrollPane(jtaLog);
        
        add(scrollpane, BorderLayout.CENTER);
        
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(300,300);
        setTitle("ChatEasyServer");
        setVisible(true);
        try{
        
       ServerSocket serverSocket = new ServerSocket(8080);
       jtaLog.append(new Date()+ ": Server started at socket");
       
       int sessionNo = 1;
       while(true){
       jtaLog.append(new Date() + ": wait for your Friend to Join Session" + sessionNo +'\n');
                Socket user1 = serverSocket.accept();
                
        jtaLog.append(new Date() + ": User1 joined session "
                        + sessionNo + '\n');
                jtaLog.append("User1's IP address"
                        + user1.getInetAddress().getHostAddress() + '\n');

                // notify to 1st User as user1
                new DataOutputStream(
                        user1.getOutputStream()).writeInt(User1);

                // Connect to user 2
                Socket user2 = serverSocket.accept();

                jtaLog.append(new Date()
                        + ": User 2 joined session " + sessionNo + '\n');
                jtaLog.append("User2's IP address"
                        + user2.getInetAddress().getHostAddress() + '\n');
                // notify 2nd user is user2
                new DataOutputStream(user2.getOutputStream()).writeInt(User2);
                
                //display session and increment
                
                jtaLog.append(new Date() + "Start thread for session " + sessionNo++ + '\n');
                
                //start new thread
                HandleSession task = new HandleSession(user1, user2);
                new Thread(task).start();  
       }
        } catch (IOException ex){
            System.err.println(ex);
        }
    }
    

   // HandleSession task = new HandleSession(client1,client2);

    public static void main(String []args) throws IOException
    {
    
    chateasyserver frame = new chateasyserver();
    
    
    
    }
}
