package com.example;

import javafx.application.Application;
import javafx.application.Platform;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Insets;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;

public class LoginUI extends Application {
    TextField tf1;
    PasswordField tf2;

    public void start(Stage primaryStage) {

        GridPane pane = new GridPane();
        pane.setHgap(10); //horizontal gap in pixels => that's what you are asking for
        pane.setVgap(10); //vertical gap in pixels
        pane.setPadding(new Insets(10, 10, 10, 10));

        Label l1 = new Label("User id:");
        Label l2 = new Label("Password");
        tf1 = new TextField();
        tf2 = new PasswordField();
        Button login = new Button("Login");
        Button cancel = new Button("Cancel");
        login.setOnAction(new LoginHandler());
        cancel.setOnAction(new CancelHandler());
        pane.add(new Label("Enter UserName :"), 0, 0);
        pane.add(tf1, 1, 0);
        pane.add(new Label("Enter Password : "), 0, 1);
        pane.add(tf2, 1, 1);

        pane.add(login, 0, 2);
        pane.add(cancel, 1, 2);

        Scene scene1 = new Scene(pane);
        primaryStage.setScene(scene1);
        primaryStage.show();
    }

    public static void main(String args[]) {
        Application.launch(args);
    }

    class LoginHandler implements EventHandler<ActionEvent> {

        @Override
        public void handle(ActionEvent arg0) {
            String s1 = tf1.getText();
            String s2 = tf2.getText();

            if (s1.equals("Administrator") && s2.equals("root")) {
                System.out.println("Login Succesfully");
            } else {
                System.out.println("Invalid");
            }
        }
    }

    class CancelHandler implements EventHandler<ActionEvent> {
        @Override
        public void handle(ActionEvent arg0) {
            Platform.exit();
        }
    }
}