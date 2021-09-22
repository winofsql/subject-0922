import java.util.Map;

import database.MysqlAction;

public class Hello {

    public static void main(String[] args) {
        // このクラスの クラスメソッド
        print("日本語表示");

        // LocalAction.java にあるクラスメソッド
        LocalAction.print("こんにちは");

        // database.MysqlAction.java 内にあるインスタンス
        MysqlAction ma = new MysqlAction();
        ma.loadMySql();

        // このクラスのインスタンス
        Hello hello = new Hello();
        hello.helloLocal("helloLocal");

        // *****************************
        // Map インターフェイスの使い方
        // *****************************
        Map<String, String> env = System.getenv();
        
        env.forEach( (key, value) -> {
            String lambda_out = String.format( "%s -> %s", key, value );
            System.out.println( lambda_out );
        });
        
        
    }

    public Hello() {
        super();
    }

    // クラスメソッド
    private static void print(String out) {
        System.out.println(out);
    }

    // インスタンスメソッド
    private void helloLocal(String out) {
        System.out.println(out);
    }

}