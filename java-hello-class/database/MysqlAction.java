package database;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class MysqlAction {

    private Connection conn;
    private Statement stmt;
    private ResultSet rs;

    public MysqlAction() {
        super();
    }

    // インスタンスメソッド
    public void loadMySql() {
        System.out.println("MySQL の読み出し");

        try {
            // 接続 : https://dev.mysql.com/downloads/connector/j/
            conn = (Connection) DriverManager
                    .getConnection("jdbc:mysql://localhost/lightbox?user=root&password=&characterEncoding=UTF-8");

            // ステートメント
            stmt = (Statement) conn.createStatement();
            // SQL 実行
            rs = stmt.executeQuery("SELECT * FROM 社員マスタ");

            // 行を読み出す
            while (rs.next()) {
                System.out.println(rs.getString("社員コード"));
                System.out.println(rs.getString("氏名"));
            }

            rs.close();
            stmt.close();
            // 接続解除
            conn.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
