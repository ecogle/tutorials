<?php

?>
<label for="opts"> Quick Nav </label>
<select id="opts">
    <optgroup label="Patterns">
        <option value="builder">Builder</option>
        <option value="singleton">Singleton</option>
    </optgroup>
    <optgroup label="Tricks">
        <option value="trick1">Trick 1</option>
    </optgroup>
</select>
<p class="section_title" id="top">Main method</p>
<textarea id="editor1">
public static void main(String[] args)
    {
        System.out.println("Hello World");
    }
</textarea>

<p class="section_title" id="builder"><a href="#abstop">Builder Pattern</a></p>
<textarea id="editor2">
public class BankAccount {
    public static class Builder {
        private long accountNumber; //This is important, so we'll pass it to the constructor.
        private String owner;
        private String branch;
        private double balance;
        private double interestRate;
        public Builder(long accountNumber) {
            this.accountNumber = accountNumber;
        }
        public Builder withOwner(String owner){
            this.owner = owner;
            return this;  //By returning the builder each time, we can create a fluent interface.
        }
        public Builder atBranch(String branch){
            this.branch = branch;
            return this;
        }
        public Builder openingBalance(double balance){
            this.balance = balance;
            return this;
        }
        public Builder atRate(double interestRate){
            this.interestRate = interestRate;
            return this;
        }
        public BankAccount build(){
            //Here we create the actual bank account object, which is always in a fully
                //initialised state when it's returned.
            //Since the builder is in the BankAccount class, we can invoke its private constructor.
            BankAccount account = new BankAccount();
            account.accountNumber = this.accountNumber;
            account.owner = this.owner;
            account.branch = this.branch;
            account.balance = this.balance;
            account.interestRate = this.interestRate;
            return account;
        }
    }
    //Fields omitted for brevity.
    private BankAccount() {
        //Constructor is now private.
    }
    //Getters and setters omitted for brevity.
}
</textarea>

<p class="section_title" id="singleton"><a href="#abstop">Singleton Pattern</a></p>
<textarea id="editor3">
 public class SingletonClass {
    private SingletonClass() {}
    private static class SingletonClassHolder {
        static final Something SINGLE_INSTANCE = new SingletonClass();
    }
    public static SingletonClass getInstance() {
        return SingletonClassHolder.SINGLE_INSTANCE;
    }
}
</textarea>

<script type="text/javascript">
    var javaEditor = CodeMirror.fromTextArea(document.getElementById("editor1"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-java"
    });

    var javaEditor = CodeMirror.fromTextArea(document.getElementById("editor2"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-java"
    });
    var javaEditor = CodeMirror.fromTextArea(document.getElementById("editor3"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-java"
    });
</script>
