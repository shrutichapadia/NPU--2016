
package chateasy;
import chateasy.chateasyconstants;
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.Component;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.GridLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.text.*;
import java.util.Scanner;
import javafx.scene.control.Cell;
import static javafx.scene.paint.Color.color;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;
import javax.swing.border.BevelBorder;
import javax.swing.border.LineBorder;
/*


 * Student Info: Name=ChapadiaShruti, ID=15574CS

 * Subject: CS532(B)_HWN3_Summer_2016

 * Author: shruti

 * Filename: chateasyclient.java

 * Date and Time: Jul 8, 2016 10:36:07 PM

 * Project Name: chateasy


 */
/**
 *
 * @author shruti
 */



public class chateasyclient extends JFrame
        implements Runnable, chateasyconstants{
    
  
    private JTextField client1 = new JTextField(32);
  private JTextField client2 = new JTextField(32);



   // Create and initialize cells
    private Cell[][] cell = new Cell[3][1];
    private char mytoken =0;
    // Create and initialize a title label
    private JLabel jlblTitle = new JLabel();
    private JLabel jlblLabel = new JLabel();
    // Create and initialize a status label
    private JLabel jlblStatus = new JLabel();

    // Indicate selected row and column by the current move
    private int rowSelected;
    private int columnSelected;
    
    // Input and output streams from/to server
    private DataInputStream fromServer;
    private DataOutputStream toServer;

    // Continue to play?
    private boolean continueToChat = true;

    // Wait for the player to mark a cell
    private boolean waiting = true;
    char token = 0;
    
    // Host name or ip
    private String host = "localhost";

  public chateasyclient(){
       
      JPanel p = new JPanel();
      p.setLayout(new GridLayout(2,1,0,0));
      for(int i=0; i<=2; i++){
      for(int j=0; j<=1;j++){
            
      }}
     p.add(new JLabel("client1"));
     p.add(new JLabel("client2"));
   
      
       p.setBorder(new LineBorder(Color.black, 1));
        jlblTitle.setHorizontalAlignment(JLabel.CENTER);
        jlblTitle.setFont(new Font("SansSerif", Font.BOLD, 16));
        jlblTitle.setBorder(new LineBorder(Color.blue, 4));
        jlblStatus.setBorder(new LineBorder(Color.black, 4));
        jlblLabel.setBorder(new LineBorder(Color.red,4));
        

        // Place the panel and the labels to the applet
        add(jlblTitle, BorderLayout.NORTH);
        add(p, BorderLayout.CENTER);
        add(jlblStatus, BorderLayout.EAST);
        add(jlblStatus, BorderLayout.WEST);
       // add(jlblLabel, BorderLayout.CENTER);

        // Connect to the server
        connectToServer();
      


        setTitle("Client");
        setSize(500, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setVisible(true);
        
  }


   
    
  public void run (){
  try{
      
      //get notification from server
      String client = fromServer.readUTF();
     
      
      //which client begin
      if(client == user1){
          jlblTitle.setText("Client1 would like to Chat with you");
 
        jlblStatus.setText("awaiting for client2 to Respond");
        fromServer.readUTF();
        jlblStatus.setText("Client2 has Joined.");

      } else if(client == user2) {
          
          jlblStatus.setText("client2 to Respond to your Message");
          jlblStatus.setText(" awaiting for Client1's Response.");
        
      } 
      
      while(continueToChat){
      
      if(client ==user1){
      waitforclientAction();
      sendMessage();
      receiveinfofromServer();
      
      } else if(client == user2){
          receiveinfofromServer();
          waitforclientAction();
          sendMessage();
      }}
  
      
  } catch(Exception ex){}
  }
  
 
    private void connectToServer(){
        try {
        Socket socket = new Socket(host, 8080);
        //input Stream
        fromServer = new DataInputStream(socket.getInputStream());
        //OutputStream
        toServer = new DataOutputStream(socket.getOutputStream());
 
    } catch(Exception ex){
            System.err.println(ex);}

   Thread thread = new Thread(this);
   thread.start();
 

    }

    private void waitforclientAction() throws InterruptedException {
      while(waiting){
      Thread.sleep(1000);}
      waiting =true;
    }

    private void sendMessage() throws IOException {
       toServer.writeUTF(user2);
       toServer.writeUTF(user1);
       
    }

    private void receiveinfofromServer() throws IOException {
        String status = fromServer.readUTF();
        
        if(status == "on"){
         continueToChat = true;
         
        }else 
        continueToChat = false;
    }

    private static class ClickListner {

        public ClickListner() {
        }
    }

    private class ClickListener extends MouseAdapter {

        private char myToken;

            public void mouseClicked(MouseEvent e) {
                boolean myTurn = false;
                
                // If cell is not occupied and the player has the turn
               if ((token == ' ') && myTurn) {
                    setToken(myToken);  // Set the player's token in the cell
                    myTurn = false;
                    int row = 0;
                    rowSelected = row;
                    int column = 0;
                    columnSelected = column;
                   
                    jlblStatus.setText("Waiting for the other player to move");
                    waiting = false; // Just completed a successful move
                
            }
               
            }

    public class cell extends JPanel{
    
    private String row;
    private String column;
    
   public cell(String row, String column){
   this.row = row;
   this.column = column;
   setBorder(new LineBorder(Color.red,5));
   addMouseListener(new ClickListener());
   
   
//    @Override
//    public void paintComponent(Graphics g){
//            super.paintComponent(g);
//
//           
//                g.drawLine(10, 10, getWidth() - 10, getHeight() - 10);
//                g.drawLine(getWidth() - 10, 10, 10, getHeight() - 10);
//           
//                g.drawOval(10, 10, getWidth() - 20, getHeight() - 20);
//       
//   }
   
   }

       
    }
    }
    public char getToken() {
                
            return token;
        }

        /**
         * Set a new token
         */
        public void setToken(char c) {
            token = c;
            repaint();
    }
    public static void main(String[]args)
  {
  chateasyclient cc = new chateasyclient();

  }

}