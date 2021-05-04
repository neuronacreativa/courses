package nc.courses.solid.s.booksample.thirdapproach;

final class StandardOutputPrinter implements Printer
{
    public void printPage(String page)
    {
        System.out.println(page);
    }
}