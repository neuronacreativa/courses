package nc.courses.solid.s.booksample.thirdapproach;

final class Client
{
    public Client() {
        Book book = new Book();
        String currentPage = book.getCurrentPage();
        Printer printer = new StandardOutputHtmlPrinter();
        printer.printPage(currentPage);
    }
}