String messageStr="BlackQR";

int server_port = 9698;

DatagramSocket s = new DatagramSocket();

InetAddress local = InetAddress.getByName("192.168.1.102");

int msg_length=messageStr.length();

byte[] message = messageStr.getBytes();

DatagramPacket p = new DatagramPacket(message, msg_length,local,server_port);

s.send(p);
