package com.example;

import javafx.application.Application;
import javafx.application.Platform;
import javafx.collections.FXCollections;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;

public class ElectiveUI extends Application {
    ComboBox CB1, CB2, CB3;

    @Override
    public void start(Stage stage1) throws Exception {
        Label lb1 = new Label("Enrollment No");
        String EN[] = { "Enrollment No 1", "Enrollment No 2", "Enrollment No 3", "Enrollment No 4", "Enrollment No 5",
                "Enrollment No 6", "Enrollment No 7", "Enrollment No 8", "Enrollment No 9", "Enrollment No 10" };
        CB1 = new ComboBox(FXCollections.observableArrayList(EN));
        CB1.setValue("Select Enrollment No");
        Label lb2 = new Label("Elective 1");
        String E1[] = { "Sowftware Engineering", "Mech. Engineering", "Elec. Engineering" };
        CB2 = new ComboBox(FXCollections.observableArrayList(E1));
        CB2.setValue("Select Elective 1");
        Label lb3 = new Label("Elective 2");
        String E2[] = { "Python With DS", "Artificial Intelligence", "Machine Learning", "Robotics" };
        CB3 = new ComboBox(FXCollections.observableArrayList(E2));
        CB3.setValue("Select Elective 2");
        Button btn = new Button("Insert");
        btn.setOnAction(new ElectiveHandler());
        Button btn2 = new Button("Cancel");
        btn2.setOnAction(new CancelHandler());
        GridPane GP = new GridPane();
        GP.setAlignment(Pos.CENTER);
        GP.addRow(0, lb1, CB1);
        GP.addRow(1, lb2, CB2);
        GP.addRow(2, lb3, CB3);
        GP.addRow(3, btn, btn2);
        GP.setHgap(20);
        GP.setVgap(20);
        Scene sc = new Scene(GP, 400, 400);
        stage1.setTitle("Elective Choice");
        stage1.setScene(sc);
        stage1.show();
    }

    public static void main(String[] args) {
        Application.launch(args);
    }

    class ElectiveHandler implements EventHandler<ActionEvent> {

        @Override
        public void handle(ActionEvent arg0) {
            String str0 = CB1.getValue().toString();
            String str1 = CB2.getValue().toString();
            String str2 = CB3.getValue().toString();
            System.out.println(str0 + " has Selected " + str1 + " and " + str2);
        }
    }

    class CancelHandler implements EventHandler<ActionEvent> {
        @Override
        public void handle(ActionEvent arg0) {
            Platform.exit();
        }
    }
}