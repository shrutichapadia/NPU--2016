import java.awt.BorderLayout;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.text.*;
import java.util.Scanner;
import javafx.scene.control.Cell;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;
import javax.swing.border.BevelBorder;

/*


 * Student Info: Name=ChapadiaShruti, ID=15574CS

 * Subject: CS532(B)_HWN3_Summer_2016

 * Author: shruti

 * Filename: chatclient.java

 * Date and Time: Jul 8, 2016 10:44:52 AM

 * Project Name: ChatNow


 */
/**
 *
 * @author shruti
 */
public class chatclient  extends JFrame
        implements Runnable, chatconstants{
    
  private JTextField client1 = new JTextField(32);
  private JTextField client2 = new JTextField(32);


  public chatclient(String c1, String c2){
      JPanel p = new JPanel();
      p.setLayout(new GridLayout(2,1));
      p.add(new JLabel("client1"));
      p.add(new JLabel("client2"));
      
       // Panel p2 for holding 
        JPanel p2 = new JPanel();
        p2.setLayout(new BorderLayout());
        p2.add(client1, BorderLayout.WEST);
        p2.add(client2, BorderLayout.CENTER);

        // Panel p3 for holding  p2
        JPanel p3 = new JPanel();
        p3.setLayout(new BorderLayout());
        p3.add(client1, BorderLayout.CENTER);
        p3.add(p2, BorderLayout.EAST);
        
         JPanel client = new JPanel(new BorderLayout());
        client.setBorder(new BevelBorder(BevelBorder.RAISED));
        client.add(p, BorderLayout.WEST);
        client.add(p3, BorderLayout.CENTER);

        // Add the student panel and button to the applet
        add(client, BorderLayout.CENTER);
        add(client, BorderLayout.SOUTH);

        // Register listener
        client.addActionListener(new ButtonListener());

        setTitle("Client");
        setSize(500, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
  }
// Indicate whether the player has the turn
    private boolean myTurn = false;

    // Indicate the token for the player
    private char myToken = ' ';

    // Indicate the token for the other player
    private char otherToken = ' ';

    // Create and initialize cells
    private Cell[][] cell = new Cell[2][1];

    // Create and initialize a title label
    private JLabel jlblTitle = new JLabel();

    // Create and initialize a status label
    private JLabel jlblStatus = new JLabel();

    // Indicate selected row and column by the current move
    private int rowSelected;
    private int columnSelected;

    // Input and output streams from/to server
    private DataInputStream fromServer;
    private DataOutputStream toServer;

    // Continue to play?
    private boolean continueToPlay = true;

    // Wait for the player to mark a cell
    private boolean waiting = true;

    // Host name or ip
    private String host = "localhost";
    
  public void run (){
  try{
      Scanner sc = new Scanner(System.in);
      //get notification from server
      String client = fromServer.readString();
      
      //which client begin
      if(client == client1){
          System.out.println("Client1 would like to Chat with you");
        String Client1= sc.next(client1);
        System.out.println("awaiting for client2 to Respond");

      } else{
       String Client2 = sc.next(client2);
      }
      boolean continuetochat;
      //continue to chat
//      while(continuetochat){
//          if(client == client1){
//           waitforclientAction();
//           sendMessage();
//           receiveinfoFromServer();
//          } 
//          else if(client = client2){
//          }
//      
//      }
      
  } catch(Exception ex){}
  }
  
  public static void main(String[]args)
  {
      String client1 = "";
      String client2 = "";
  //chatclient cc = new chatclient(client1, client2);
  
  
  Scanner sc = new Scanner(System.in);
    sc.hasNext(client1);
    sc.hasNext(client2);
  System.out.println(client2);
  System.out.println(client1);
  
  
  }

   

    private static class fromServer {

        private static String String;

        private static String readString() {
            return String;
        }
        public fromServer() {
        }
    }

    private static class p {

        public p() {
        }
    }

//    private class ButtonListener implements ActionListener {
//        
//        public void actionperformed(ActionEvent e) {
//           @Override
//         void actionPerformed(ActionEvent e) {
//            try {
//                // Establish connection with the server
//                Socket socket = new Socket(host, 8000);
//
//                // Create an output stream to the server
//                ObjectOutputStream toServer
//                        = new ObjectOutputStream(socket.getOutputStream());
//
//                // Get text field
//                String client1 = p.getText().trim();
//                String street = jtfStreet.getText().trim();
//               
//
//                // Create a Student object and send to the server
//                StudentAddress s = new StudentAddress(name, street, city, state, zip);
//                toServer.writeObject(s);
//            } catch (IOException ex) {
//                System.err.println(ex);
//            }
    //    }
  //  }

} 
    

