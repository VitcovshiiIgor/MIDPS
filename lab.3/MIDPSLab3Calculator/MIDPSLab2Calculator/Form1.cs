using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;


namespace MIDPSLab2Calculator
{
    public partial class Form1 : Form
    {
        Double resultValue = 0;
        string operation = "";
        bool isOperationChoosen = false;

        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            switch (operation)
            {
                case "+":
                    textBoxResult.Text = (resultValue + Double.Parse(textBoxResult.Text)).ToString();
                    break;
                case "-":
                    textBoxResult.Text = (resultValue - Double.Parse(textBoxResult.Text)).ToString();
                    break;
                case "*":
                    textBoxResult.Text = (resultValue * Double.Parse(textBoxResult.Text)).ToString();
                    break;
                case "/":
                    textBoxResult.Text = (resultValue / Double.Parse(textBoxResult.Text)).ToString();
                    break;
                case "^":
                    textBoxResult.Text = (Math.Pow(resultValue, Double.Parse(textBoxResult.Text))).ToString();
                    break;
                case "√":
                    textBoxResult.Text = (Math.Sqrt(resultValue)).ToString();
                    break;
                case "- +":
                    textBoxResult.Text = (resultValue * (-1)).ToString();
                    break;
                default:
                    break;
            }
            resultValue = Double.Parse(textBoxResult.Text);
            label.Text = "";
        }

        private void button_click(object sender, EventArgs e)
        {
            if ((textBoxResult.Text == "0") || (isOperationChoosen))
                textBoxResult.Clear();
            isOperationChoosen = false;
            Button button = (Button)sender;
            if (button.Text == ".")
            {
                if(!textBoxResult.Text.Contains("."))
                    textBoxResult.Text = textBoxResult.Text + button.Text;
            } else
                textBoxResult.Text = textBoxResult.Text + button.Text;
        }

        private void operation_click(object sender, EventArgs e)
        {
            Button button = (Button)sender;
            if (resultValue != 0)
            {
                buttonEquation.PerformClick();
                operation = button.Text;
                label.Text = resultValue + " " + operation;
                isOperationChoosen = true;
            }
            else
            {
                operation = button.Text;
                resultValue = Double.Parse(textBoxResult.Text);
                label.Text = resultValue + " " + operation;
                isOperationChoosen = true;
            }
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            textBoxResult.Clear();
            resultValue = 0;
        }
    }
}
